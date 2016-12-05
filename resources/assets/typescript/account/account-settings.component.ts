import { Component, OnInit} from '@angular/core';

import { FormBuilder, FormGroup, FormControl } from '@angular/forms';


@Component({
  selector: 'account-component',
  templateUrl: 'templates/account-settings.component.html'
})
export class AccountSettingsComponent  
implements OnInit{

	password_form : FormGroup;
	constructor(private fb: FormBuilder){}
	
	ngOnInit() {
		this.password_form = this.fb.group({

		});
	}

}


