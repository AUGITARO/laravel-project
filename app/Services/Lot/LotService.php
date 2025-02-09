<?php

declare(strict_types=1);

namespace App\Services\Lot;

use App\Dto\Lot\LotStoreDto;
use App\Models\Lot;
use App\Services\Lot\Contracts\LotServiceInterface;
use Illuminate\Database\Eloquent\Collection;

final class LotService implements LotServiceInterface
{
    public function getAll(): Collection
    {
        return Lot::all();
    }

    public function store(LotStoreDto $lotStoreDto): ?Lot
    {
        $imagePath = $lotStoreDto->image->store('lots/' . $lotStoreDto->user->id);

        return Lot::create([
            'title'       => $lotStoreDto->title,
            'description' => $lotStoreDto->description,
            'start_price' => $lotStoreDto->startPrice,
            'bet_step'    => $lotStoreDto->betStep,
            'deadline'    => $lotStoreDto->deadline,
            'category_id' => $lotStoreDto->categoryId,
            'user_id'     => $lotStoreDto->user->id,
            'image_path'  => $imagePath,
        ]);
    }
}
