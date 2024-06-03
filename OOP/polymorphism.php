class A
{
    public function method1()
    {
        return $this->method2();
    }

    protected function method2()
    {
        return 'A';
    }
}

class B extends A
{
    protected function method2()
    {
        return 'B';
    }
}

$b = new B();

echo $b->method1();