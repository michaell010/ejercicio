<?php

namespace App\Services;

use App\Repositories\Interfaces\SalonInterface;

class SalonService
{
    protected $salonRepository;

    public function __construct(SalonInterface $salonRepository)
    {
        $this->salonRepository = $salonRepository;
    }

    /**
     * Obtener todos los salones
     */
    public function getAllSalones()
    {
        return $this->salonRepository->getAll();
    }

    /**
     * Obtener un salón por ID
     */
    public function getSalonById(int $id)
    {
        return $this->salonRepository->getById($id);
    }

    /**
     * Crear un nuevo salón
     */
    public function createSalon(array $data)
    {
        // Aquí puedes agregar lógica adicional si lo deseas
        return $this->salonRepository->create($data);
    }

    /**
     * Actualizar un salón existente
     */
    public function updateSalon(int $id, array $data)
    {
        

        return $this->salonRepository->update($id, $data);
    }

    /**
     * Eliminar un salón
     */
    public function deleteSalon(int $id)
    {
        return $this->salonRepository->delete($id);
    }
}
