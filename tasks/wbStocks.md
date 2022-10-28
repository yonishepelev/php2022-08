## Обмен остатками с WB.

### Получить список номенклатуры.
Ссылка на документацию- https://openapi.wildberries.ru/?ysclid=l9s5q2v3i0602008737#tag/Kontent-Prosmotr/paths/~1content~1v1~1cards~1list/post

#### Возвращаем
Результат: [item_code]


### Список товара с WB остатками
https://openapi.wildberries.ru/?ysclid=l9s5q2v3i0602008737#tag/Marketplace/paths/~1api~1v2~1stocks/get
    
#### Возвращаем
['item_code' => 'stock']

### Получить остатки базы данных.
#### Входящие параметры
[item_code]
#### Возвращаем  
['item_code' => 'stock']

### Сравнить остатки и вернуть расхождения
#### Входящие параметры
(массив остатков WB, массив остатков с базы данных)
#### Возвращаем
['item_code' => 'stock']

### Выгружаем на WB
https://openapi.wildberries.ru/?ysclid=l9s5q2v3i0602008737#tag/Marketplace/paths/~1api~1v2~1stocks/post
#### Входящие параметры
(массив с расхождениями остатков)