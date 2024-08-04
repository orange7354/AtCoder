package main

import "fmt"

func main() {
	// 1583 <= y <= 2023
	var y int
	fmt.Scan(&y)

	if y%4 != 0 {
		fmt.Println(365)
	} else if y%100 == 0 && y%400 != 0 {
		fmt.Println(365)
	} else if y%400 == 0 {
		fmt.Println(366)
	} else {
		if y%100 != 0 {
			fmt.Println(366)
		}
	}
}
