<?php
use PHPUnit\Framework\TestCase;

class collectionTest extends TestCase {
    
    /** @test */
    public function empty_returns_no_items() {
    
       $collection = new \App\Support\Collection;
       $this->assertEmpty($collection->get()); 
    }

    /** @test */
    public function count_is_correct() {
        $collection = new \App\Support\Collection([
            'one', 'two', 'three'
        ]);
        $this->assertEquals(3, $collection->count());
    }

    /** @test */
    public function items_returned_match_items_passed() {
    
        $collection = new \App\Support\Collection([
            'one', 'two', 'three'
        ]);
        $this->assertCount(3, $collection->get());
        $this->assertEquals('one', $collection->get()[0]);
        $this->assertEquals('two', $collection->get()[1]);
    }

     /** @test */
     public function collection_is_instance_of_iterator_aggergator() {
    
        $collection = new \App\Support\Collection();
        $this->assertInstanceOf(IteratorAggregate::class, $collection); 
    }

    /** @test */
    public function collection_can_be_iterated() {
    
        $collection = new \App\Support\Collection([
            'one', 'two', 'three'
        ]);
        $items = [];
        foreach($collection as $item) {
            $items[] = $item;
        }
        $this->assertCount(3, $items);
        $this->assertInstanceOf(ArrayIterator::class, $collection->getIterator());
    }
    
     /** @test */
     public function collection_can_be_merged_with_another_collection() {
    
        $collection = new \App\Support\Collection([
            'one', 'two'
        ]);
        $collection2 = new \App\Support\Collection([
            'four', 'three'
        ]);
        $newCollection = $collection->merge($collection2);
        $this->assertCount(4, $newCollection->get());
        $this->assertEquals(4, $newCollection->count());
    }
}