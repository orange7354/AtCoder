package main

import (
	"fmt"
)

func main() {

	text := "Hello"ZZZZZZ
	chars := []rune(text)
	for _, char := range chars {
		fmt.Printf("%c ", char)
	}
	// var n int
	// fmt.Scan(&n)

	// strSlice := make([]string, n)

	// var max int = 0

	// for i := 0; i < n; i++ {
	// 	fmt.Scan(&strSlice[i])
	// 	tmp := utf8.RuneCountInString(strSlice[i])
	// 	if tmp > max {
	// 		max = tmp
	// 	}
	// }

	// // for i := 0; i < max; i ++ {
	// // 	for i
	// // }

	fmt.Println(chars)
}
