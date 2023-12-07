import { Component, OnInit } from '@angular/core';
import { ApiService } from 'src/app/services/api.service';
import { Form, FormBuilder, FormControl, FormGroup, Validators } from '@angular/forms';

@Component({
  selector: 'app-edit-user',
  templateUrl: './edit-user.page.html',
  styleUrls: ['./edit-user.page.scss'],
})
export class EditUserPage implements OnInit {

  users: any [] = [];
  form: FormGroup;

  constructor(private ApiService: ApiService, public fb: FormBuilder)
  {
    this.form = this.fb.group({
      "name": new FormControl("", Validators.required),
      "lastname": new FormControl("", Validators.required),
      "age": new FormControl("", Validators.required),
      "city": new FormControl("", Validators.required),
      "country": new FormControl("", Validators.required),
      "email": new FormControl("", Validators.required),
      "github": new FormControl("", Validators.required),
      "instagram": new FormControl("", Validators.required),
      "summary": new FormControl("", Validators.required),
      "id": new FormControl("", Validators.required),
    });
  }

  ngOnInit() {
    this.fillData();
  }

  fillData(){
    this.ApiService.getUsers().subscribe(data=>{
      console.log(data);
      this.users = data;
    })
  }

  onSubmit(){
    this.form.value.id = this.users[0].id;
    this.ApiService.editUser(this.form.value).subscribe(response=>{
      console.log("Usuario editado con éxito",response);
    })
  }

}
