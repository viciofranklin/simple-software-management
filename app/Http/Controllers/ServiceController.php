<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * @return View|Factory 
     */
    public function index()
    {
        // Listato delle entità
    }

    /**
     * @return View|Factory 
     */
    public function create()
    {
        // Form di creazione entità
    }


    /**
     * @param Request $request 
     * @return RedirectResponse 
     * @throws BindingResolutionException 
     */
    public function store(Request $request)
    {
        // Validazione dati
        // Inserimento
        // Redirect alla pagina precedente
    }

    
    /**
     * @param Service $service 
     * @return View|Factory 
     * @throws BindingResolutionException 
     */
    public function show(Service $service)
    {
        // Visualizzazione singola entità
    }

    /**
     * @return View|Factory 
     */
    public function edit(Service $service)
    {
        // Form di modifica entità
    }

    /**
     * @param Request $request 
     * @return RedirectResponse 
     * @throws BindingResolutionException 
     */
    public function update(Request $request, Service $service)
    {
        // Validazione dati
        // Modifica
        // Redirect alla pagina precedente
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
