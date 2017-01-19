<?php

class ExamplesTableSeeder extends AbstractTableSeeder
{
    public function run()
    {
        $this->truncateTable('examples');
        $this->truncateTable('tagging_tags');
        $this->truncateTable('tagging_tag_groups');
        $this->truncateTable('tagging_tagged');

        /** @var \App\Models\Example[] $examples */
        $examples = factory(\App\Models\Example::class)
            ->times(16)
            ->create();

        /** @var \Faker\Generator $faker */
        $faker = app(\Faker\Generator::class);

        foreach ($examples as $example) {

            $example->retag(
                $faker->randomElements($this->tags(), rand(1, 3))
            );
        }
    }

    protected function tags()
    {
        return [
            'Fake',
            'SuperDuper',
            'Large',
            'Needs citation',
            'Free',
            'Disregard',
            'Totally up to date',
            'Branded',
            'Check',
        ];
    }
}
