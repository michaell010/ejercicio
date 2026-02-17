<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Interfaces\SalonInterface;
use App\Models\Salon;

class SalonRepository implements SalonInterface
{
    protected $model;

    public function __construct(Salon $model)
    {
        $this->model = $model;
    }

    /**
     * Obtener todos los salones
     */
    public function getAll()
    {
        return $this->model->all();
    }

    /**
     * Obtener salón por ID
     */
    public function getById(int $id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * Crear salón
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * Actualizar salón
     */
    public function update(int $id, array $data)
    {
        $salon = $this->model->findOrFail($id);
        $salon->update($data);
        return $salon;
    }

    /**
     * Eliminar salón
     */
    public function delete(int $id)
    {
        $salon = $this->model->findOrFail($id);
        return $salon->delete();
    }
}
