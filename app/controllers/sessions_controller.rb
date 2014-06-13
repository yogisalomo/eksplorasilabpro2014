class SessionsController < ApplicationController
	def new
	end

	def show
	end
	
	def index
	end
	
	def create
		user = Users.authenticate(params[:username], params[:password])
		if user
			session[:user_id] = user.id
			render 'profile'
		else
			flash.now.alert = "Invalid username or password"
			render 'loginFail'
		end
	end

	def destroy
		session[:user_id] = nil
		render 'new'
	end
	
	def updateUser
		user = Users.find(session[:user_id])
		user.fullname = params[:username]
		user.save
		render 'profile'
	end
	
	def profile
		render 'profile'
	end
	
	def wall
		render 'wall'
	end
	
	def message
		render 'message'
	end
	
	def search
		render 'search'
	end
	
	def chat
		render 'chat'
	end
	
	def edit_profile
		render 'edit_profile'
	end
	
	def friend
		render 'friend'
	end
	
	def current_user
		@current_user ||=  session[:user_id] && Users.find(session[:user_id])
	end
	
	private
	def update_params
		params.permit(:fullname, :birthplace, :birthdate, :city, :hobby)
	end
end
