class User
  attr_reader :name

  def initialize(name, weight)
    @name = name
    @weight = weight
  end

  def heavier_than?(other_user)
    other_user.weight < @weight
  end

  protected

  def weight
    @weight
  end
end

require "minitest/autorun"

class WeightTest < Minitest::Test
  def setup
    @foo = User.new("Foo", 50)
    @bar = User.new("Bar", 60)
  end

  def test_foo_heavier_than_bar?
    assert_equal @foo.heavier_than?(@bar), false
  end

  def test_bar_heavier_than_foo?
    assert_equal @bar.heavier_than?(@foo), true
  end

  def test_foo_weight
    assert_equal(@foo.send(:weight), 50)
  end

  def test_bar_weight
    assert_equal(@bar.send(:weight), 60)
  end
end
