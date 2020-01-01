def fib(n)
  raise "invalid num" if n < 0
  if n == 0 || n == 1
    n
  else
    fib(n - 1) + fib(n - 2)
  end
end

require "minitest/autorun"

class FibTest < Minitest::Test
  def test_fib_negative
    assert_raises RuntimeError do
      fib(-1)
    end
  end

  def test_fib_positive
    assert_equal(fib(0), 0)
    assert_equal(fib(1), 1)
    assert_equal(fib(2), 1)
    assert_equal(fib(3), 2)
    assert_equal(fib(4), 3)
    assert_equal(fib(5), 5)
    assert_equal(fib(6), 8)
    assert_equal(fib(7), 13)
    assert_equal(fib(8), 21)
    assert_equal(fib(9), 34)
  end
end
