<?php

use Illuminate\Database\Seeder;
use App\Comic;
class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = config('comics');
        foreach ($data as $item) {
            // $newComic = new Comic();
            // $newComic->title = $item['title'];
            // $newComic->description = $item['description'];
            // $newComic->thumb = $item['thumb'];
            // $newComic->price = $item['price'];
            // $newComic->series = $item['series'];
            // $newComic->sale_date = $item['sale_date'];
            // $newComic->type = $item['type'];
            // avessi la stessa relazione dei nomi tra nome colonne e nome dei dati da inserire, (dopo aver modificato il model comic con fillable) posso utilizzare il metodo:
            $pasta->fill($data);
            $newComic->save();
        }
    }
}
