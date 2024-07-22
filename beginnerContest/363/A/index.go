package main

import "fmt"

func main() {
	var R int
	fmt.Scan(&R)

	if 100 > R {
		fmt.Println(100 - R)
	} else if 100 <= R && R < 200 {
		fmt.Println(200 - R)
	} else if 200 <= R && R < 300 {
		fmt.Println(300 - R)
	} else if 300 <= R && R < 400 {
		fmt.Println(400 - R)
	}

}
