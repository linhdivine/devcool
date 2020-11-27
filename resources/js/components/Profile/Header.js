import React from "react";
 const Header = (props) => {
    return (
        <section className="header-profile">
            <section className="container-fluid">
                <section className="title-profile">
                    <h1 className="title">THÔNG TIN LIÊN HỆ</h1>
                </section>
                <section className="row panel-profile">
                    <section className="col-md-2">
                        <section className="avatar-profile">
                            <img className="avatar"src={props.avatar} alt="logo" />
                        </section>
                    </section>
                    <section className="col-md-10">
                        <section className="list-group">
                            <ul className="list-info">
                                <li><strong>Họ Tên: {props.name}</strong></li>
                                <li><span><b>Email:</b> {props.email}</span></li>
                                <li><span><b>Ngày sinh:</b> {props.birthday}</span></li>
                                <li><span><b>Địa chỉ:</b> {props.address}</span></li>
                                <li><span><b>Điện thoại:</b> {props.phonenumber}</span></li>
                            </ul>
                        </section>
                    </section>
                </section>
            </section>
        </section>
    );
}
export default Header
