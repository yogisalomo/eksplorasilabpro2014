require 'test_helper'

class MainControllerTest < ActionController::TestCase
  test "should get profile" do
    get :profile
    assert_response :success
  end

  test "should get wall" do
    get :wall
    assert_response :success
  end

  test "should get chat" do
    get :chat
    assert_response :success
  end

  test "should get friend" do
    get :friend
    assert_response :success
  end

  test "should get message" do
    get :message
    assert_response :success
  end

  test "should get search" do
    get :search
    assert_response :success
  end

end
