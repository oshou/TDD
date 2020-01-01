class BowlingGame
end

require "minitest/autorun"

class BowlingGameTest < Minitest::Test
  def setup
    @game = BowlingGame.new
  end
end
