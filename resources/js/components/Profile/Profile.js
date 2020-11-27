import React,{Component} from "react";
import ReactDOM from 'react-dom';
import Header from './Header';
import Information from '../Infomation/Information';
import Secondskills from './Secondskills';
import axios from 'axios';
 class Profile extends React.Component{
    constructor() {
        super();
        this.state ={
            users: {
                name: 'Nguyễn Thiên Linh',
                email: 'thienlinh2509@gmail.com',
                birthday: '20/08/1995',
                address: 'Yên Nghĩa, Hà Đông , Hà Nội',
                phonenumber:'0357565139',
                avatar: './fontend/media/xman.jpg',
            },
        };
    }
     render(){
         const user = this.state.users;
        return (
             <div className="profile-background">
                <Header name={user.name}
                         email={user.email}
                         avatar={user.avatar}
                         birthday={user.birthday}
                         address={user.address}
                         phonenumber={user.phonenumber} />
                 <article className="content-profile">
                     <section className="container-fluid">
                            <Information />
                            <Secondskills/>
                     </section>
                 </article>
            </div>
        );
    }
}
export default Profile
