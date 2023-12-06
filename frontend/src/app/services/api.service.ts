import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable, firstValueFrom } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class ApiService {
  private url:string = 'http://127.0.0.1:8000/api/profile';

  constructor(private http:HttpClient) {}

  getUsers():Observable<any>{
    return this.http.get<any>(this.url);
  }

  editUserData(){}

  editFrameworks(){}

  editHobbies(){}
}
