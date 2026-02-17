<?php

namespace App\Http\Controllers;

use App\Http\Requests\SalonRequest;
use App\Services\SalonService;
use Illuminate\Http\JsonResponse;

class SalonController extends Controller
{
    protected $salonService;

    public function __construct(SalonService $salonService)
    {
        $this->salonService = $salonService;
    }

    /** Listar todos los salones */
    public function index(): JsonResponse
    {
        $salones = $this->salonService->getAllSalones();

        return response()->json([
            'message' => 'Lista de salones obtenida correctamente',
            'data' => $salones,
            'code' => 200
        ], 200);
    }

    /** Mostrar un salón específico */
    public function show(int $id): JsonResponse
    {
        $salon = $this->salonService->getSalonById($id);

        return response()->json([
            'message' => 'Salón obtenido correctamente',
            'data' => $salon,
            'code' => 200
        ], 200);
    }

    /** Crear un nuevo salón */
    public function store(SalonRequest $request): JsonResponse
    {
        $salon = $this->salonService->createSalon($request->validated());

        return response()->json([
            'message' => 'Salón creado correctamente',
            'data' => $salon,
            'code' => 201
        ], 201);
    }

    /** Actualizar un salón existente */
    public function update(SalonRequest $request, int $id): JsonResponse
    {
        $salon = $this->salonService->updateSalon($id, $request->validated());

        return response()->json([
            'message' => 'Salón actualizado correctamente',
            'data' => $salon,
            'code' => 200
        ], 200);
    }

    /** Eliminar un salón */
    public function destroy(int $id): JsonResponse
    {
        $this->salonService->deleteSalon($id);

        return response()->json([
            'message' => 'Salón eliminado correctamente',
            'data' => null,
            'code' => 204
        ], 204);
    }
}
