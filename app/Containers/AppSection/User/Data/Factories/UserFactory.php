<?php
//
//namespace App\Containers\AppSection\User\Data\Factories;
//
//use App\Containers\AppSection\User\Enums\Gender;
//use App\Containers\AppSection\User\Models\User;
//use App\Ship\Parents\Factories\Factory as ParentFactory;
//use Illuminate\Support\Str;
//
///**
// * @template TModel of User
// *
// * @extends ParentFactory<TModel>
// */
//class UserFactory extends ParentFactory
//{
//    /** @var class-string<TModel> */
//    protected $model = User::class;
//
//    public function definition(): array
//    {
//        return [
//            'name' => fake()->name(),
//            'email' => fake()->unique()->safeEmail(),
//            'password' => 'password',
//            'email_verified_at' => now(),
//            'remember_token' => Str::random(10),
//            'gender' => fake()->randomElement(['male', 'female', 'unspecified']),
//            'birth' => fake()->date(),
//        ];
//    }
//
//    public function admin(): static
//    {
//        return $this->afterCreating(function (User $user) {
//            $user->assignRole(config('appSection-authorization.admin_role'));
//        });
//    }
//
//    public function unverified(): static
//    {
//        return $this->state(function (array $attributes) {
//            return [
//                'email_verified_at' => null,
//            ];
//        });
//    }
//
//    public function verified(): static
//    {
//        return $this->state(function (array $attributes) {
//            return [
//                'email_verified_at' => now(),
//            ];
//        });
//    }
//
//    public function gender(Gender $gender): static
//    {
//        return $this->state(function (array $attributes) use ($gender) {
//            return compact('gender');
//        });
//    }
//}


namespace App\Containers\AppSection\User\Data\Factories;

use App\Containers\AppSection\User\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = User::class;

    public function definition()
    {
        return [
            'f_name' => $this->faker->firstName(),
            'l_name' => $this->faker->lastName(),
            'm_name' => $this->faker->lastName(),
            'birthday' => $this->faker->date(),
            'password' => Hash::make($this->faker->password()),
            'email' => $this->faker->unique()->safeEmail(),
            'image' => $this->faker->image(),
        ];
    }
}
