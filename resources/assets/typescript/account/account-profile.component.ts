import { Component, OnInit} from '@angular/core';

import { FormBuilder, FormGroup, FormControl } from '@angular/forms';
import { FileUploader } from 'ng2-file-upload';
import { UserService } from './../services/user-service';
import { ProfileService } from './../services/profile-service';
import { Profile } from './../models/profile';
import { User } from './../models/user';


@Component({
  selector: 'account-component',
  templateUrl: 'templates/account-profile.component.html'
})

export class AccountProfileComponent implements OnInit{
	private profile_uploader :FileUploader;
	private profile_form : FormGroup;
	private profile_image : string;
	constructor(private fb: FormBuilder, private userService: UserService,private profileService : ProfileService){}
	
	ngOnInit() {

		let options = this.profileService.getProfileUploaderOptions();
		options.queueLimit = 1;
		this.profile_uploader = new FileUploader(options);


		
		this.profile_form = this.fb.group({
			'name' : '',
			'bio' : '',
			'company' : '',

		});

		this.userService.getUser().subscribe((user : User) =>{
			this.profileService.getProfile(user.username).subscribe((profile :Profile)=>{
				this.profile_form.patchValue({
					'name' : profile['name'],
					'bio' : profile['bio'],
					'company' : profile['company']
				});
				this.profile_image = profile.profile_image;
			});
		});
	}

	updatePublicProfile()
	{
		if(this.profile_uploader.queue && this.profile_uploader.queue.length > 0)
		{
			this.profile_uploader.uploadItem(this.profile_uploader.queue[this.profile_uploader.queue.length - 1]);

		}
		
		this.profileService.updateProfile(this.profile_form.value).subscribe((profile:Profile) =>{
			this.profile_form.patchValue({
				'name' : profile['name'],
				'bio' : profile['bio'],
				'company' : profile['company'],
			});

			this.profile_image = profile.profile_image;
			UIkit.notify('Profile Updated');
		},
		(errors: any) =>{

		});
	}

}
