<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        /**
         * adding the directory where store the images of the products
         */
        $filepath = storage_path('images');

        if(!File::exists($filepath)){
        File::makeDirectory($filepath);
        }

        // $randomImages = [
        //     'https://images.unsplash.com/photo-1483985988355-763728e1935b?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8ZmFzaGlvbnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
        //     'https://images.unsplash.com/photo-1496747611176-843222e1e57c?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8ZmFzaGlvbnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
        //     'https://images.unsplash.com/photo-1581044777550-4cfa60707c03?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8ZmFzaGlvbnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
        //     'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGZhc2hpb258ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
        //     'https://images.unsplash.com/photo-1539109136881-3be0616acf4b?ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8ZmFzaGlvbnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
        //     'https://images.unsplash.com/photo-1506152983158-b4a74a01c721?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fGZhc2hpb258ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',

        //     'https://images.unsplash.com/photo-1550614000-4895a10e1bfd?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fGZhc2hpb258ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
        //     'https://images.unsplash.com/photo-1495121605193-b116b5b9c5fe?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fGZhc2hpb258ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
        //     'https://images.unsplash.com/photo-1485968579580-b6d095142e6e?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTh8fGZhc2hpb258ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
        //     'https://images.unsplash.com/photo-1475180098004-ca77a66827be?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjB8fGZhc2hpb258ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
        //     'https://images.unsplash.com/photo-1485230895905-ec40ba36b9bc?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjZ8fGZhc2hpb258ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',

        //     'https://images.unsplash.com/photo-1439158771502-46975f6e44e9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjh8fGZhc2hpb258ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',

        //     'https://images.unsplash.com/photo-1487222477894-8943e31ef7b2?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fGZhc2hpb258ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
        //     'https://images.unsplash.com/photo-1496217590455-aa63a8350eea?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzB8fGZhc2hpb258ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
        //     'https://images.unsplash.com/photo-1500643752441-4dc90cda350a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzF8fGZhc2hpb258ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
        //     'https://images.unsplash.com/photo-1482270406631-a02c51d93c2f?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzN8fGZhc2hpb258ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
        //     'https://images.unsplash.com/photo-1463100099107-aa0980c362e6?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzZ8fGZhc2hpb258ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',

        //     'https://images.unsplash.com/photo-1552160753-117159821e01?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mzh8fGZhc2hpb258ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
        //     'https://images.unsplash.com/photo-1514047882-673ad74081a3?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mzd8fGZhc2hpb258ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
        //     'https://images.unsplash.com/photo-1490132328392-e6ef54a90dda?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDR8fGZhc2hpb258ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
        //     'https://images.unsplash.com/photo-1551803091-e20673f15770?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDV8fGZhc2hpb258ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
        //     'https://images.unsplash.com/photo-1550402537-6f7b6189b3b6?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTB8fGZhc2hpb258ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
        // ];

        // $files = Storage::allFiles($filepath);

        // $randomFile = Arr::random($files, 1);
        // dd($randomFile);
        return [
            'name' => $this->faker->company(),
            'category_id' => $this->faker->numberBetween(1,8),
            'franchise' => $this->faker->city('es_ES'),
            // 'image' => $this->faker->image($filepath ,640,480, $imageRand, null, false),
            'image' => $this->faker->imageUrl(300,300),
            'size' => $this->faker->randomElement(['XXL', 'XL', 'L', 'M', 'S']),
            'user_id' => $this->faker->numberBetween(1, 10),
            'price' => $this->faker->numberBetween(10,30),
            'weight' => $this->faker->numberBetween(0.50 , 2.00)
            ];
    }
}
