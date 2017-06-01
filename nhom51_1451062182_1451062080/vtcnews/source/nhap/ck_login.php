<?php  
//$getUsers=$_GET['txtUser'];
//echo 'Xin chao '.' ' .$getUsers;
if(isset($_GET['txtUser']) && isset($_GET['txtPass']))
/*echo "login succesfully";
*/
//B1 KET NOI dAATABASE 
{
$getUser=$_GET['txtUser'];
$host='localhost';
$user='root';
$pass='';
$db='vtcnews';
$link=mysqli_connect($host,$user,$pass,$db);
$sql="SELECT * FROM `users` WHERE Username ='$getUser'";
$result =mysqli_query($link,$sql);
if(mysqli_num_rows($result)>0)
{echo 'Xin chao ' .' ' .$getUser .'ban da dang nhap thanh cong';
}else {
	echo "user name khong ton tai";
}

}
else
	echo 'Ban chua nhap du lieu';
?>

 <p>Thời gian gần đây, báo chí không ngừng đưa tin về một vị lương y mang tên Nguyễn Thị Hiền trú tại Xóm Đình – Thôn Phú Vinh – Xã An Khánh - Huyện Hoài Đức – Hà Nội với bài thuốc gia truyền gần 400 năm chữa bệnh trĩ.</p>
                           <p>Theo chân những người bệnh, chúng tôi đến thăm ngôi nhà nhỏ của vị lương y này với mục đích tìm hiểu căn nguyên phương thuốc bí truyền 400 năm kia làm nên điều kì diệu cho những bệnh nhân mắc trĩ như thế nào?</p>
                           <table class="figure">
                              <tbody>
                                 <tr>
                                    <td><img src="http://media.phapluatplus.vn/files/thuluong/2016/01/18/a-1600.jpg" alt="Theo ghi nhận của nhóm pv chúng tôi, mới 7h sáng nhưng đã rất đông bệnh nhân tìm đến nhà lương y Hiền." /></td>
                                 </tr>
                                 <tr class="figcaption">
                                    <td><em style="text-align: start; background-color: #ffffff;">Theo ghi nhận của nhóm pv chúng tôi, mới 7h sáng nhưng đã rất đông bệnh nhân tìm đến nhà lương y Hiền.</em></td>
                                 </tr>
                              </tbody>
                           </table>
                           <p>Vừa mới hơn 7h sáng nhưng trong sân ngoài ngõ của nhà lương y Nguyễn Thị Hiền đã tấp nập người ra kẻ vào, có người đi cả xe ô tô, gửi tận ngoài đình thôn Phú Vinh rồi đi bộ vào nhà lương y (cách đó 50m) xếp hàng chờ bốc thuốc.</p>
                           <p>Chúng tôi đứng cạnh một thanh niên chừng 25-26, lân la hỏi chuyện, cô cho biết mình là Hoàng Phương Mai, hiện đang là nhân viên thu ngân tại một siêu thị lớn ngoài Hà Nội, Mai cho biết cách đây vài tuần cô đi táo, lau giấy thấy ra máu liền đến khám bác sĩ, thì được chuẩn đoán đã mắc trĩ độ 1, từ một người bạn làm cùng quê ở An Khánh giới thiệu, Mai tìm về nhà lương y Nguyễn Thị Hiền, lo không gặp được thầy thuốc, Mai đã về nhà bạn từ chiều qua, sáng sớm nay cô đã túc trực ngay đầu ngõ, đợi giờ làm việc của lương y Hiền là vào gặp ngay.</p>
                           <table class="figure">
                              <tbody>
                                 <tr>
                                    <td><img src="http://media.phapluatplus.vn/files/thuluong/2016/01/18/b-1601.jpg" alt="Chân dung vị lương y chữa khỏi bệnh trĩ bằng phương pháp đông y đầu tiên ở Việt Nam." /></td>
                                 </tr>
                                 <tr class="figcaption">
                                    <td><span style="text-align: start; background-color: #ffffff;">Chân dung vị lương y chữa khỏi bệnh trĩ bằng phương pháp đông y đầu tiên ở Việt Nam.</span></td>
                                 </tr>
                              </tbody>
                           </table>
                           <p><strong>Truyền nhân của bài thuốc chữa khỏi bệnh trĩ gần 400 năm là ai? </strong></p>
                           <p>Tiến đến vào trong sân, từng tiếng thì thẩm nhỏ to dội lại, đủ để chúng tôi nhận ra không chỉ có những người sống quanh vùng tìm đến nhà lương y, ngay cả giọng xứ Huế, người miền Trung, miền Nam đều có cả.</p>
                           <p>Chúng tôi nhanh chóng tìm ghế ngồi đợi đến lượt được lương y thăm khám, ngồi bên chúng tôi là chị T- một phụ nữ ngoài 50, chị rôm rả kể chuyện với những người xung quanh, thì ra chị là người cùng quê với lương y Hiền, hôm nay đưa người bà con lặn lội từ Nghệ An ra nhờ bốc thuốc chữa bệnh trĩ ngoại.</p>
                           <p>Chị T cho biết  lương y Nguyễn Thị Hiền là con gái của một lương y có tiếng thời trước- gia đình đã có truyền thống chữa bệnh bằng phương pháp Đông y gần 400 năm nay, ngay từ ngày nhỏ, lương y Hiền đã được cha cho theo học cách bốc thuốc, nhận dạng các vị thảo dược qua mùi hương, tác dụng của từng loại dược liệu quí đối với cơ thể.</p>
                           <p> “<em>Lương y Hiền là con nhà nòi rồi, mới 6-7 tuổi trẻ trong làng còn vắt mũi chưa sạch, cô Hiền đã biết phân biệt thế nào là hòe hoa tán, cam thảo, tác dụng của nó đối với tạng phủ ra sao, tuy là con gái trông bé nhỏ thôi nhưng cô Hiền thông minh, học giỏi lắm, cô Hiền thi đỗ vào học viện Y học cổ truyền Tuệ Tĩnh, giờ thời gian bốc thuốc trị bệnh ở nhà cô chỉ làm vào cuối giờ chiều và hai ngày cuối tuần thôi, vì cô còn đi làm tại bệnh viện nữa</em>”, chị T cho biết.</p>
                           <p>Qua tìm hiểu, chúng tôi được biết thêm, ngoài những bí quyết chữa bệnh trĩ bằng Đông y từ gia đình, lương y Hiền còn tới tận những vùng người dân tộc Nùng, Dao, Thái, Mường để tìm hiểu thêm về những dược liệu quí trên rừng mà dân tộc họ dùng để chữa bệnh truyền từ đời này sang đời khác.</p>
                           <table class="figure">
                              <tbody>
                                 <tr>
                                    <td><img src="http://media.phapluatplus.vn/files/thuluong/2016/01/18/bb-1603.jpg" alt="Trong những năm qua, lương y Hiền đã chữa khỏi cho hàng trăm nghìn lượt bệnh nhân thoát khỏi căn bệnh trĩ mà không cần đến phải phẫu thuật." /></td>
                                 </tr>
                                 <tr class="figcaption">
                                    <td><span style="text-align: start; background-color: #ffffff;">Trong những năm qua, lương y Hiền đã chữa khỏi cho hàng trăm nghìn lượt bệnh nhân thoát khỏi căn bệnh trĩ mà không cần đến phải phẫu thuật.</span></td>
                                 </tr>
                              </tbody>
                           </table>
                           <p>Vì không hẹn trước  nên chúng tôi chờ từ sáng sớm đến gần trưa mới tới lượt, sau khi được chúng tôi giới thiệu là phóng viên đến tìm hiểu về phương pháp bí truyền 400 điều trị bệnh trĩ đang được nhiều tờ báo, nhiều người dân khắp nơi quan tâm, lương y Hiền gật đầu như hiểu ý chúng tôi muốn gì.</p>
                           <p>Chị vừa kiểm tra lại số thuốc đã đóng gói cẩn thận để chuyển phát cho những bệnh nhân ở xa vừa nói chuyện với chúng tôi, lương y Hiền bảo chúng tôi thông cảm vì nhiều bệnh nhân ở ngoài đang đợi quá, họ đến từ sáng sớm, chầu chực nhiều ngày mà không gặp được chị nên chị cố gắng giải quyết càng sớm càng tốt để bệnh nhân và người nhà bớt phần mệt mỏi, nhất là những người mắc bệnh trĩ tới đây, đứng nhiều hay ngồi nhiều họ đều cảm thấy rất khó chịu.</p>
                           <p><strong><em>Phương thuốc gia truyền gần 400 năm</em></strong></p>
                           <p>Vừa giúp chị sắp xếp những thang thuốc quí vào trong thùng carton, chúng tôi vừa nửa đùa nửa thật hỏi chị, trĩ là căn bệnh không dễ chữa, nhiều người chữa đi chữa lại còn không khỏi, vậy mà chỉ với 10 thang thuốc của chị, nhiều người như “sống lại” vì thoát khỏi sự đau đớn, dày vò của căn bệnh khó nói này, phải chăng trong những thang thuốc quí, chị đã bỏ thêm dược liệu gì thần thánh lắm mới làm được?</p>
                           <p>Lương y Hiền cười nhìn chúng tôi, chị nói các anh đừng nói thế mà nhiều người hiểu lầm, tôi chẳng có tài năng thần thánh nào cả, tất cả những gì tôi có, những thang thuốc tôi bốc cho bệnh nhân đều là bí quyết gia truyền điều trị bệnh trĩ mà  cha ông tôi để lại, nó đều dựa trên nền tảng những dược liệu quí mà những ai am hiểu về Đông y không ai không quen tên biết mặt cả, như hòe hoa, y dĩ, cam thảo, mộc hương,…</p>
                           <p>Chị cho biết thêm, ngoài việc áp dụng triệt để những qui tắc điều trị trĩ bằng thuốc nam của giới Đông y, gia tộc chị còn có bí quyết riêng trong việc định lượng và thêm các thành phần thảo dược quí trong mỗi thang thuốc điều trị trĩ – chị ôn tồn nói với chúng tôi rằng đó là bí mật của gia đình, chị xin phép không tiết lộ thêm.</p>
                           <p>Lương y Nguyễn Thị Hiền cho biết, trĩ là bệnh mà “thập nhân cửu trĩ” (cứ 10 người thì tới 9 người mắc căn bệnh này), tuy trĩ không nguy hiểm tới tính mạng nhưng nếu không điều trị đúng cách, kịp thời bệnh sẽ ngày một nặng thêm và gây khó chịu, mất tự tin cho bệnh nhân.</p>
                           <p>Ngày nay dù Tây y không ngừng tiến bộ và phát triển, trang thiết bị máy móc hiện đại, từ đó khá  nhiều phương pháp điều trị bệnh trĩ ra đời như: thắt búi trĩ bằng vòng cao su, quang đông hồng ngoại, tiêm gây xơ búi trĩ,…</p>
                           <p>Nhưng thường tốn kém và nguy cơ để lại biến chứng cao như nhiễm trùng chính vì thế điều trị bệnh trĩ không cần phẫu thuật vẫn là phương pháp được nhiều người chọn lựa hơn cả.  </p>
                           <p>Khác với Tây y, Đông y chú trọng tìm ra căn nguyên, cội nguồn mắc bệnh, nên tuy thời gian có lâu hơn so với phương pháp Tây y nhưng giải quyết được gốc rễ của bệnh.</p>
                           <p>Với những thảo dược quí trong dân gian, bài thuốc gia truyền 400 năm chữa bệnh trĩ của lương y Nguyễn Thị Hiền chú trọng tới việc kháng viêm, giảm đau rát, cầm máu, chống co thắt đại tràng, gia tăng trương lực thành mạch, thanh nhiệt nhanh, nhuận tràng,…từ đó giúp cơ thể dần phục hồi, bệnh trĩ được điều trị dứt điểm.</p>
                           <table class="figure">
                              <tbody>
                                 <tr>
                                    <td><img src="http://media.phapluatplus.vn/files/thuluong/2016/01/18/c-1604.jpg" alt="Hàng trăm nghìn gói thuốc đã được chuyển phát nhanh theo đường bưu điện cho các bệnh nhân khắp cả nước." /></td>
                                 </tr>
                                 <tr class="figcaption">
                                    <td>Hàng trăm nghìn gói thuốc đã được chuyển phát nhanh theo đường bưu điện cho các bệnh nhân khắp cả nước.</td>
                                 </tr>
                              </tbody>
                           </table>
                           <p>Bằng phương thuốc gia truyền 400 năm chữa bệnh trĩ được cha ông truyền lại, lương y Nguyễn Thị Hiền đã và đang trở thành địa chỉ chữa bệnh trĩ được người dân khắp cả nước tìm đến.</p>
                           <p>Chị Phạm Thu Thủy (Vĩnh Phúc) là một trong số những bệnh nhân tìm đến lương y Nguyễn Thị Hiền khi đã mắc trĩ ở cấp độ năng. Chị Thủy cho biết, chị bị trĩ khi mang thai đứa con đầu lòng, sau khi sinh chị sợ ảnh hưởng đến con vì phẫu thuật chữa trĩ chắc chắn sẽ mất sữa nên đành cố đợi cho con lớn.</p>
                           <p>Thời gian trôi qua, do thói quen sinh hoạt bệnh trĩ ngày một nặng thêm, một lần tình cờ chị tìm hiểu thuốc chữa bệnh trĩ sau khi sinh thì cho ra rất nhiều bài báo viết về lương y Nguyễn Thị Hiền ở Hoài Đức- Hà Nội. Chị sắp xếp thời gian và tới gặp lương y Hiền ngay, chị cho biết đây là lần thứ hai chị xuống thăm lương Hiền, “<em>Tôi không ngờ lại có ngày trở lại được cuộc sống bình thường từ sau khi mắc trĩ, nhiều người nói rằng tôi nên chấp nhận sống chung với nó đến cuối đời, nhưng nhờ có thuốc của lương y Hiền, đến giờ tôi đã hoàn toàn khỏe mạnh như thời con gái, nay tôi đến để cảm ơn lương y”, </em>chị Thủy hồ hởi kể với chúng tôi.</p>
                           <p>Câu chuyện của chị Thủy chỉ là một trong số hàng nghìn bệnh nhân mắc trĩ đã được lương y Nguyễn Thị Hiền chữa khỏi, dù còn rất nhiều điều muốn hỏi, nhưng xem chừng đã muộn, chúng tôi nghĩ nên ra về để lương y còn nghỉ ngơi.</p>
                           <p>Đúng là “trăm nghe không bằng một thấy”, những gì chúng tôi chứng kiến, những chia sẻ từ người thầy thuốc có kinh nghiệm và tấm lòng nhân ái đã khiến chúng tôi hiểu vì sao bài thuốc gia truyền 400 năm ấy có thể cứu chữa hàng nghìn con người hàng ngày hàng giờ sống trong đau đớn vì trĩ trở lại cuộc sống vui vẻ như trước.</p>
                           <p>Chia tay chúng tôi, lương y Hiền nhanh chóng bước vào phòng gói nốt những thang thuốc quí để kịp chuyển tới tay người bệnh khắp mọi miền đất nước, với những việc chị đang làm, chúng tôi tin y đức của chị sẽ còn phủ rộng hơn nữa trong một ngày không xa.</p>
                           <div>
                              <table style="height: 48px; width: 21px;" cellspacing="0" cellpadding="0" align="left">
                                 <tbody>
                                    <tr>
                                       <td style="padding-top: 0in; padding-right: 9.0pt; padding-bottom: 0in; padding-left: 9.0pt;" align="left" valign="top">
                                          <p class="MsoNormal" style="text-align: center; line-height: 200%; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: paragraph; mso-element-anchor-horizontal: margin; mso-element-top: 11.55pt; mso-height-rule: exactly;" align="center"><strong><span style="text-decoration: underline;"><span style="font-family: 'Arial','sans-serif';"> </span></span></strong></p>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>