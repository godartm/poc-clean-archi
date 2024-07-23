<?php

declare(strict_types=1);

namespace App\Domain\Base\Repository;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * @template TModel of Model
 * @template TBuilder of Builder
 */
interface Repository
{
    /**
     * @return TBuilder
     */
    public function query();

    /**
     * @return Collection<int, TModel>
     */
    public function all(): Collection;

    /**
     * @return TModel|null
     */
    public function find(mixed $id);

    /**
     * @param  array<int, array<int, scalar>>  $criteria
     * @param  array<int, string>  $columns
     * @return TModel|null
     */
    public function findOneBy(array $criteria, array $columns = ['*']);

    /**
     * @param  array<int, array<int, scalar>>  $criteria
     * @return Collection<int, TModel>
     */
    public function findBy(array $criteria, string $sortBy, string $sortDirection = 'asc'): Collection;

    /**
     * @return TModel
     */
    public function create(Model $model, bool $refresh = false);

    /**
     * @return TModel
     */
    public function update(Model $model, bool $refresh = false);

    public function delete(Model $model): void;

    public function deleteOrFail(Model $model): void;

}
