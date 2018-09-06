<?php

use Illuminate\Database\Seeder;

class FilmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->insert([
            'name' => 'Men in Black (1997 film)',
            'description' => 'Men in Black is a 1997 American science fiction action comedy film directed by Barry Sonnenfeld and produced by Walter F. Parkes and Laurie MacDonald. Loosely adapted from The Men in Black comic book series created by Lowell Cunningham and Sandy Carruthers, the film stars Tommy Lee Jones and Will Smith as two agents of a secret organization called the Men in Black, who supervise extraterrestrial lifeforms who live on Earth and hide their existence from ordinary humans. The film featured the creature effects and makeup of Rick Baker and visual effects by Industrial Light & Magic.',
            'release_date' => '1997-03-06',
            'rating' => 5,
            'ticket_price' => 10.00,
            'country' => 225,
            'photo' => 'generic.png',
            'slug' => \Illuminate\Support\Str::slug('Men in Black (1997 film)'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('films')->insert([
            'name' => 'U.S. Marshals',
            'description' => 'U.S. Marshals is a 1998 American action crime thriller film directed by Stuart Baird. The storyline was conceived from a screenplay written by Roy Huggins and John Pogue. The film is a spin-off to the 1993 motion picture The Fugitive, which in turn was based on the television series of the same name, created by Huggins. The story does not involve the character of Dr. Richard Kimble, portrayed by Harrison Ford in the initial film, but instead the plot centers on United States Deputy Marshal Sam Gerard, once again played by Tommy Lee Jones. The plot follows Gerard and his team as they pursue another fugitive, Mark Sheridan, played by Wesley Snipes, who attempts to escape government officials following an international conspiracy scandal. The cast features Robert Downey, Jr., Joe Pantoliano, Daniel Roebuck, Tom Wood, and LaTanya Richardson, several of whom portrayed Deputy Marshals in the previous film.',
            'release_date' => '1998-07-21',
            'rating' => 5,
            'ticket_price' => 10.00,
            'country' => 225,
            'photo' => 'generic.png',
            'slug' => \Illuminate\Support\Str::slug('U.S. Marshals'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('films')->insert([
            'name' => 'The Pursuit of Happynesss',
            'description' => 'The Pursuit of Happyness is a 2006 American biographical drama film based on entrepreneur Chris Gardner\'s nearly one-year struggle being homeless. Directed by Gabriele Muccino, the film features Will Smith as Gardner, a homeless salesman. Smith\'s son Jaden Smith co-stars, making his film debut as Gardner\'s son, Christopher Jr.',
            'release_date' => '2006-12-15',
            'rating' => 5,
            'ticket_price' => 10.00,
            'country' => 225,
            'photo' => 'generic.png',
            'slug' => \Illuminate\Support\Str::slug('The Pursuit of Happyness'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
