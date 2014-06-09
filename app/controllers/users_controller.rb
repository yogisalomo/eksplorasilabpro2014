class UsersController < ApplicationController
	def register
	end
	
	def create
		render plain: params[:article].inspect
	end
end
