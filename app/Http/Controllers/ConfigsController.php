<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\ConfigCreateRequest;
use App\Http\Requests\ConfigUpdateRequest;
use App\Repositories\ConfigRepository;
use App\Validators\ConfigValidator;
use App\Entities\Config;

/**
 * Class ConfigsController.
 *
 * @package namespace App\Http\Controllers;
 */
class ConfigsController extends Controller
{
    protected $repository;

    public function __construct(ConfigRepository $repository, Config $config)
    {
        $this->repository = $repository;
        $this->repository = $config;
    }

    public function index()
    {
        $config = $this->repository->all();

        return view('admin.config', [
            'config' => $config
        ]);
    }

    public function store(ConfigUpdateRequest $request)
    {  
        $data = $request->only(['whatsapp', 'facelink', 'instalink']);

        if ($request->hasFile('logo') && $request->logo->isValid()){
            $imagePath = $request->logo->store('configs');

            $data['logo'] = $imagePath;
        }

        if ($request->hasFile('icon') && $request->icon->isValid()){
            $imagePath = $request->icon->store('configs');

            $data['icon'] = $imagePath;
        }

        if ($request->hasFile('banner1') && $request->banner1->isValid()){
            $imagePath = $request->banner1->store('configs');

            $data['banner1'] = $imagePath;
        }

        if ($request->hasFile('banner2') && $request->banner2->isValid()){
            $imagePath = $request->banner2->store('configs');

            $data['banner2'] = $imagePath;
        }

        if ($request->hasFile('banner3') && $request->banner3->isValid()){
            $imagePath = $request->banner3->store('configs');

            $data['banner3'] = $imagePath;
        }

        if ($request->hasFile('newsletter') && $request->newsletter->isValid()){
            $imagePath = $request->newsletter->store('configs');

            $data['newsletter'] = $imagePath;
        }

        if ($request->hasFile('payment') && $request->payment->isValid()){
            $imagePath = $request->payment->store('configs');

            $data['payment'] = $imagePath;
        }

        $this->repository->create($data);

        return redirect()->back();
    }

    public function edit($id)
    {   
        $config = Config::find($id);
        return view('admin.config', compact('config', 'id'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->only(['whatsapp', 'facelink', 'instalink']);

        if ($request->hasFile('logo') && $request->logo->isValid()){
            $imagePath = $request->logo->store('configs');

            $data['logo'] = $imagePath;
        }

        if ($request->hasFile('icon') && $request->icon->isValid()){
            $imagePath = $request->icon->store('configs');

            $data['icon'] = $imagePath;
        }

        if ($request->hasFile('banner1') && $request->banner1->isValid()){
            $imagePath = $request->banner1->store('configs');

            $data['banner1'] = $imagePath;
        }

        if ($request->hasFile('banner2') && $request->banner2->isValid()){
            $imagePath = $request->banner2->store('configs');

            $data['banner2'] = $imagePath;
        }

        if ($request->hasFile('banner3') && $request->banner3->isValid()){
            $imagePath = $request->banner3->store('configs');

            $data['banner3'] = $imagePath;
        }

        if ($request->hasFile('newsletter') && $request->newsletter->isValid()){
            $imagePath = $request->newsletter->store('configs');

            $data['newsletter'] = $imagePath;
        }

        if ($request->hasFile('payment') && $request->payment->isValid()){
            $imagePath = $request->payment->store('configs');

            $data['payment'] = $imagePath;
        }

       Config::whereId($id)->update($data);
        return redirect()->back()->with('success', 'Data is succesfully update');
    }

    public function destroy($id)
    {
        $config = $this->repository->where('id', $id);
        if (!$config)
            return redirect()->back();

        $config->delete();

        return redirect()->back();

    }
}