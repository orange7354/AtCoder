package main

import "fmt"

func main() {
	var s1, s2, s3 string

	fmt.Scan(&s1)
	fmt.Scan(&s2)
	fmt.Scan(&s3)

	var m = map[string]bool{
		"ABC": false,
		"ARC": false,
		"AGC": false,
		"AHC": false,
	}
	m[s1] = true
	m[s2] = true
	m[s3] = true

	for i, v := range m {
		if v == false {
			fmt.Println(i)
			break
		}
	}

}
