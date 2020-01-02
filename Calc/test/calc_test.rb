require "minitest/autorun"
require "../lib/calc"

class CalcTest < Minitest::Test
  def test_add
    assert_equal 3, add(1, 2)
  end

  def test_subtract
    assert_equal 1, subtract(2, 1)
    assert_equal 2, subtract(3, 1)
  end

  def test_multiply
    assert_equal 6, multiply(3, 2)
    assert_equal 15, multiply(5, 3)
    assert_equal 42, multiply(6, 7)
  end

  def test_divide
    assert_equal 3, divide(9, 3)
    assert_equal 5, divide(15, 3)
  end
end
