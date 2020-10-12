<?php

namespace App\Services;

use Illuminate\Database\QueryException;
use Exception;
use Prettus\Validator\Exceptions\ValidatorException;
use Prettus\Validator\Contracts\ValidatorInterface;
use App\Repositories\EventosRepository;
use App\Validators\EventosValidator;

class EventosService
{

	private $repository;
	private $validator;

	public function __construct(EventosRepository $repository, EventosValidator $validator)
	{
		$this->repository = $repository;
		$this->validator  = $validator;
	}

	public function store($data)
	{
		try
		{
			$this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
			$evento = $this->repository->create($data);

			return [
				'success' => true,
				'messages' => "Evento cadastrado",
				'data'    => $evento,
			];
		}
		catch(Exception $e)
		{
			switch (get_class($e)) {
				case QueryException::class : return ['success' => false, 'messages' => $e->getMessage()];
				case ValidatorException::class : return ['success' => false, 'messages' => $e->getMessageBag()];
				case Exception::class : return ['success' => false, 'messages' => $e->getMessage()];	
				default : return ['success' => false, 'messages' => $e->getMessage()];
			}
		}
	}

	public function update(){}
	
	public function destroy(){}

}