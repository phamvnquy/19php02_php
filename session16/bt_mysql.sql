-- 1. Lấy tất cả sản phẩm thuộc danh mục Guitars, có giá lớn hơn 300 và tên có chứa
-- chữ 'o', sắp xếp theo giá giảm dần
SELECT * FROM products
 INNER JOIN categories ON products.categoryID = categories.categoryID
 WHERE categories.categoryName = 'Basses'


