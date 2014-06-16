class UsersController < ApplicationController
	def new
	end
	
	def create
		@user = User.new(user_params)

		if @user.save
			redirect_to @user
		else
			render 'registerError'
		end
	end
	
	def show
		render 'sessions/new'
	end
	
	def index
		@users = User.all
	end
	
	private
	def user_params
		params.require(:users).permit(:username, :password, :fullname, :birthplace, :birthdate, :city, :hobby, :gender)
	end
end
