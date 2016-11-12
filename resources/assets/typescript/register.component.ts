import { Component, OnInit }      from '@angular/core';
import { Router } from '@angular/router';

import { FormBuilder, FormGroup } from '@angular/forms';

import {UserService} from "./services/user-service";

@Component({
  selector: 'register',
  templateUrl: 'templates/register.component.html',
  providers: []
})
export class RegisterComponent {
	registerForm : FormGroup;
	errors:  any;
	constructor(private userService: UserService,private router: Router, fb: FormBuilder){
		

		this.registerForm = fb.group({
			'name' :'',
			'email' : '',
			'password' : '',
			'password_confirmation' : ''
		});	
	}

	register():void{
		let temp;
		this.userService.register(this.registerForm.value).subscribe(t => temp,error =>  this.errors = <any>error);
		if(this.errors == null)
		{
			this.router.navigate(['/']);
		}
	}
}


