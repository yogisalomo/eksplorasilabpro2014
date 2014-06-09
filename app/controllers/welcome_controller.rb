class WelcomeController < ApplicationController
	def index
	end
	
	def register
	end
	
	def user_params
		params.require(:user).permit(:username, :password, :fullname, :birthplace, :birthdate, :city, :hobby, :gender)
	end
end
