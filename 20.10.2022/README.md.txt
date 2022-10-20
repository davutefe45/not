HTML
- **border** sınırla ilgili işlemleri yapmak için kullanılır.
- margin **top** üstten boşluk, right sağdan boşluk, **left** soldan boşluk, **bottom** alttan boşluk, hiçbir şey eklemeyip sadece margin yazarsak her yandan boşluk bırakır
- sınırların dıştan içe doğru olan sıralaması ***margin>border>padding*** şeklindedir. **Margin** en dıştaki kısım **border** onun içine konulanların **margin**'e olan sınırı **padding** ise **border** içine konulanların **border**'a karşı olan sınırını ifade eder.
- **margin top=0px** tanımlaması üzerinde işlem yaptığımız ekranı yukarı yapıştırıp arada boşluk kalmamasını sağlar.
- **display:flex;** der isek sıralı şekilde dizilmelerini sağlar flex olmaz ise oluşturduğumuz pencereler satır satır sıralanır ekler isek tek satırda hizalanır.
- **flex-direction** flex'in yönünü belirleyip ne yana doğru sıralancaklarını gösterir. row-reverse tanımlaması bir satır içerisinde tersi şeklinde sıralamamıza yardımcı olur. **column-reverse** ise bir sütunda bu işlemi gerçekleştirir. Bu sayede sola değil sağa yaslı olur ve sıraları da tersine döner.
- **nowrap** ***default*** şeklinde tanımlıdır ekran küçüldüğü takdirde oluşturduğumuz kutular aşağı kaymadan tek satırda durur **wrap** ise otomatik olarak kutuları alta kaydırmaya yarar. **wrap-reverse** ise tersi şeklinde aşağı kaydırma yapar.