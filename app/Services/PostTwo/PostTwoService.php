<?php

namespace App\Services\PostTwo;

use App\Models\PostTwo;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

// En la service Class encapsulamos toda la lógica relacionada con una entidad, en este caso la entidad PostTwo.
class PostTwoService
{
    public function getAll(): LengthAwarePaginator
    {
        // se obtienen todos los obhetos posttwo ordenados en query
        $query = PostTwo::latest();
        // los queries de paginan de 10 en 10 
        return $query->paginate(PostTwo::PAGINATE);
    
    }
    // public function create(){
    //     return PostTwo::create([
    //         'title'=>$request->input('title'),
    //         // 'featured'=>$request->input('featured'),
    //         'content'=>$request->input('content'),
    //         'status'=>$request->input('status'),
    //     ]);
    // }
    public function create(array $data): PostTwo
    {
        return PostTwo::create($data);
    }

}