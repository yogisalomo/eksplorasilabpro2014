class UsersController < ApplicationController
	def new
	end
	
	def create
		@users = Users.new(users_params)

		if @users.save
			redirect_to @users
		else
			render 'registerError'
		end
	end

	def show
		render 'main/index'
	end
	
	def index
		@users = Users.all
	end
	
	private
	def users_params
		params.require(:users).permit(:username, :password, :fullname, :birthplace, :birthdate, :city, :hobby, :gender)
	end
end
