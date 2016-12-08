import { Component, OnInit }      from '@angular/core';
import { Router } from '@angular/router';


import { FormBuilder, FormGroup } from '@angular/forms';

import {UserService} from "./services/user-service";

@Component({
  selector: 'register',
  templateUrl: 'templates/register.component.html',
  providers: []
})
export class RegisterComponent implements OnInit {
registerForm : FormGroup;
errors:  any;
constructor(private userService: UserService,private router: Router, private fb: FormBuilder){}

ngOnInit() {
	this.registerForm = this.fb.group({
		'name' :'',
		'email' : '',
		'password' : '',
		'password_confirmation' : ''
	});	
}



register():void{
	let temp = this.errors;
	this.userService.register(this.registerForm.value).subscribe(
		(result: any) =>{
			this.router.navigate(['/']);
		},
		(e : any) => {
			this.errors = e;
		}
	);
	// if(this.errors == undefined)
	// {
	// 	this.router.navigate(['/']);
	// }
}
}


