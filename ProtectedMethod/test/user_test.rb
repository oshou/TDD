require "minitest/autorun"
require "../lib/user"

class UserTest < Minitest::Test
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
end
