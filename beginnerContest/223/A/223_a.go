package main

import "fmt"

func main() {
	var n int
	fmt.Scan(&n)

	if n%100 == 0 && n/100 >= 1 {
		fmt.Println("Yes")
	} else {
		fmt.Println("No")
	}

}
