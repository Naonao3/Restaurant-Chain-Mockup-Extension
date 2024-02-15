<?php

namespace Helpers;

use Faker\Factory;
use Models\Companies\RestaurantChains\RestaurantChain;
use Models\RestaurantLocations\RestaurantLocation;
use Models\Users\Employees\Employee;

class RandomGenerator{
    public static function employee(int $minSalary,int $maxSalary): Employee{
        $faker = Factory::create();

        return new Employee(
            $faker->randomNumber(),
            $faker->firstName(),
            $faker->lastName(),
            $faker->email,
            $faker->password,
            $faker->phoneNumber,
            $faker->address,
            $faker->dateTimeThisCentury,
            $faker->dateTimeBetween('-10 years','+20 years'),
            $faker->randomElement(['admin','user','editor']),
            $faker->randomElement(['Chef','Cashier','Server','Cooking Assitance']),
            $faker->randomFloat(4,$minSalary,$maxSalary),
            $faker->dateTimeBetween('-10 years','now'),
            array($faker->randomElement(['Great!!','Good!','Not bad','Same...']))
        );
    }

    public static function employees(
                                    int $numberEmployees,
                                    int $minSalary,
                                    int $maxSalary):array{
        $faker = Factory::create();
        $employees = [];

        for($i = 0;$i < $numberEmployees;$i++){
            $employees[] = self::employee($minSalary,$maxSalary);
        }
        return $employees;
    }

    public static function restauratLocation(
                                            int $numberEmployees,
                                            int $minSalary,
                                            int $maxSalary,
                                            int $minZipcode,
                                            int $maxZipcode): RestaurantLocation{
        $faker = Factory::create();

        return new RestaurantLocation(
            $faker->streetAddress(),
            $faker->address(),
            $faker->city(),
            $faker->state(),
            $faker->randomnumber($minZipcode,$maxZipcode),
            self::employees($numberEmployees,$minSalary,$maxSalary),
            $faker->boolean(),
            $faker->boolean()
        );
    }

    public static function restauratLocations(
                                            int $numberEmployees,
                                            int $minSalary,
                                            int $maxSalary,
                                            int $numberLocations,
                                            int $minZipcode,
                                            int $maxZipcode):array{
        $faker = Factory::create();
        $restaurantLocations = [];

        for($i = 0;$i < $numberLocations;$i++){
            $restaurantLocations[] = self::restauratLocation(
                                                            $numberEmployees,
                                                            $minSalary,
                                                            $maxSalary,
                                                            $minZipcode,
                                                            $maxZipcode);
        }
        return $restaurantLocations;
    }

    public static function restaurantChain(
                                            int $numberEmployees,
                                            int $minSalary,
                                            int $maxSalary,
                                            int $numberLocations,
                                            int $minZipcode,
                                            int $maxZipcode):RestaurantChain{
        $faker = Factory::create();

        return new RestaurantChain(
            $faker->company(),
            $faker->year(),
            $faker->text(100),
            $faker->url(),
            $faker->phoneNumber(),
            $faker->randomElement(['Restaurant','Hotl','IT','Bank']),
            $faker->name(),
            $faker->boolean(),
            $faker->country(),
            $faker->name(),
            $numberEmployees,
            $faker->randomNumber(),
            self::restauratLocations($numberEmployees,$minSalary,$maxSalary,$numberLocations,$minZipcode,$maxZipcode),
            $faker->randomElement(['Japanese','French','Chainese','Brazilian','Indian']),
            $numberLocations,
            $faker->company()
        );
    }

    public static function restaurantChains(int $numberEmployees,
                                            int $minSalary,
                                            int $maxSalary,
                                            int $numberLocations,
                                            int $minZipcode,
                                            int $maxZipcode):array{
        $faker = Factory::create();
        $restaurantChains = [];
        $numberOfRestaurantChains = $faker->numberBetween(1,5);

        for($i = 0;$i < $numberOfRestaurantChains; $i++){
            $restaurantChains[] = self::restaurantChain($numberEmployees,
                                                        $minSalary,
                                                        $maxSalary,
                                                        $numberLocations,
                                                        $minZipcode,
                                                        $maxZipcode);
        }
        return $restaurantChains;
    }

}

?>