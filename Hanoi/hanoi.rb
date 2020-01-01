class Hanoi
  def disc(n)
    raise "invalid index" if n <= 0
    if n == 1
      1
    else
      disc(n - 1) + 1 + disc(n - 1)
    end
  end
end

require "minitest/autorun"

class HanoiTest < Minitest::Test
  def setup
    @hanoi = Hanoi.new
  end

  def test_disc0
    assert_raises RuntimeError do
      @hanoi.disc(0)
    end
  end

  def test_disc1
    assert_equal(1, @hanoi.disc(1))
  end

  def test_disc4
    assert_equal(15, @hanoi.disc(4))
  end

  def teardown
  end
end
