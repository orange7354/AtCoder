package main

import (
	"fmt"
	"strconv"
	"strings"
)

func toInt(s string) (int, error) {
	v, err := strconv.Atoi(s)
	if err != nil {
		return 0, err
	}

	return v, nil
}

func main() {

	var x string
	fmt.Scan(&x)
	slice := strings.Split(x, "")

	a := make([]int, len(slice))

	for i, v := range slice {
		num, _ := toInt(v)
		a[i] = num
	}

	var res bool = true

	for i := 0; i <= 2; i++ {
		if a[i] == 9 {
			if a[i+1] != 0 {
				res = false
			}
		} else if a[i] != 9 && a[i+1] != a[i]+1 {
			res = false
		}
	}

	if a[0] == a[1] && a[1] == a[2] && a[2] == a[3] {
		res = true
	}

	if res {
		fmt.Println("Week")
	} else {
		fmt.Println("Strong")
	}
}
