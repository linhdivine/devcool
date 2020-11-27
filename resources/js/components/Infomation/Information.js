import React from "react";

class Information extends React.Component{
    render() {
        return(
            <div className="information">
                <section className="title-profile">
                    <h2 className="title">THÔNG TIN HỒ SƠ</h2>
                </section>
                <section className="row panel-profile">
                    <section className="col-md-12">
                        <section className="title-panel">
                            <h1>Tiêu đề hồ sơ xin việc: <span> Lập trình viên</span></h1>
                        </section>
                    </section>
                    <section className="col-md-6">
                        <section className="list-group">
                            <ul className="list-info">
                                <li><span><b> Hình thức làm việc:</b> Toàn thời gian cố định</span></li>
                                <li><span><b>Mức lương mong muốn:</b>  6 – 15 triệu</span></li>
                            </ul>
                        </section>
                    </section>
                    <section className="col-md-6">
                        <section className="list-group">
                            <ul className="list-info">
                                <li><span><b>  Ngành nghề:</b> Lập trình web</span></li>
                                <li><span><b> Địa điểm làm việc:</b> Hà Nội</span></li>
                                <li><span><b>Ngoại ngữ:</b> Tiếng Việt , Tiếng Anh</span></li>
                                <li><span><b>Giới tính:</b> Nam</span></li>
                                <li><span><b>Hôn nhân:</b>  Độc thân</span></li>
                            </ul>
                        </section>
                    </section>
                    <section className="col-md-12">
                        <section className="title-panel">
                            <h4>Giới thiệu bản thân</h4>
                        </section>
                        <section className="sumaary-profile">
                        </section>
                    </section>
                    <section className="col-md-12">
                        <section className="title-panel">
                            <h4>Mục tiêu nghề nghiệp</h4>
                        </section>
                        <section className="sumaary-profile">
                            <p> - Tìm được một công việc trong môi trường chuyên nghiệp, tận dụng được kinh nghiệm
                                tôi đã tích lũy được những thời gian qua.</p>
                            <p>- Ưu tiên những công việc có tính chất chuyên môn, bên cạnh cũng tham gia những công
                                việc khác.</p>
                        </section>
                    </section>
                </section>
            </div>
        );
    }
}
export default Information;
