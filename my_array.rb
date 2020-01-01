class MyArray
  def initialize
    @array = []
  end

  def empty?
    @array.empty?
  end

  def <<(o)
    @array << o
    self
  end
end

require "minitest/autorun"

class TestMyArray
  def setup
    @array = MyArray.new
  end

  def test_empty_by_empty_myarray
    assert(@array.empty?)
  end

  def test_empty_by_noempty_myarray
    @array << "1st"
    assert(!@array.empty?)
  end
end
