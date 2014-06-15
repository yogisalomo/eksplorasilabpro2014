class SessionsController < ApplicationController
	def new
	end

	def show
	end
	
	def index
	end
	
	def create
		user = User.authenticate(params[:username], params[:password])
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
		user = User.find(session[:user_id])
		if user
			user.fullname = params[:fullname]
			user.birthplace = params[:birthplace]
			user.birthdate = params[:birthdate]
			user.city = params[:city]
			user.hobby = params[:hobby]
			user.save
			render 'profile'
		else
			#supposed error
		end
	end
	
	def createPesan
		user = User.find_by_username(params[:receiver])
		if user
			pesan = Pesans.new
			pesan.receiver = params[:receiver]
			user = Users.find(session[:user_id])
			pesan.sender = user.username
			pesan.text = params[:text]
			pesan.save
			render 'sendSuccess'
		else
			render 'MsgError'
		end
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
		@current_user ||=  session[:user_id] && User.find(session[:user_id])
	end
	
	def current_inbox
		@current_inbox ||= current_user && Pesan.where(["receiver = ?", current_user.username]).select("sender, text, created_at").all.order(created_at: :desc)
	end
	
	private
	def update_params
		params.permit(:fullname, :birthplace, :birthdate, :city, :hobby)
	end
end
