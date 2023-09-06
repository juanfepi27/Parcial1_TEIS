<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class Pet extends Model
{
    /**
     * PET ATTRIBUTES
     * $this->attributes['id'] - int - contains the pet primary key (id)
     * $this->attributes['name'] - string - contains the pet name
     * $this->attributes['type'] - string - contains the pet type (Cat or Dog)
     * $this->attributes['score'] - int - contains the punctuation that a pet has
     * $this->attributes['created_at'] - string - contains the date when a pet was creates at the data base
     * $this->attributes['update_at'] - string - contains the date when a pet's information was updated at the data base
     */
    protected $fillable = ['name', 'type', 'score'];

    public static function validate(Request $request): void
    {
        $request->validate([
            'name' => ['required'],
            'type' => ['required', Rule::in(['Cat', 'Dog'])],
            'score' => ['required', 'numeric', 'min:0', 'max:100'],
        ]);
    }

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function setName(string $name): void
    {
        $this->attributes['name'] = $name;
    }

    public function getType(): string
    {
        return $this->attributes['type'];
    }

    public function setType(string $type): void
    {
        $this->attributes['type'] = $type;
    }

    public function getScore(): int
    {
        return $this->attributes['score'];
    }

    public function setScore(int $score): void
    {
        $this->attributes['score'] = $score;
    }

    public function getCreatedAt(): string
    {
        return $this->attributes['created_at'];
    }

    public function getUpdatedAt(): string
    {
        return $this->attributes['updated_at'];
    }
}
