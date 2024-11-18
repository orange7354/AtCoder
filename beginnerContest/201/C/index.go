package main

import (
	"fmt"
	"strconv"
)

func main() {
	var s string
	fmt.Scan(&s)

	in := make([]int, 0, 10)
	out := make([]int, 0, 10)

	for i, v := range []rune(s) {
		st := string(v)
		if st == "o" {
			in = append(in, i)
		} else if st == "x" {
			out = append(out, i)
		}
	}
	ans := 0

	for i := 0; i <= 9999; i++ {
		str := fmt.Sprintf("%04d", i)
		sl := make([]int, 4)
		for i, v := range []rune(str) {
			n, _ := strconv.Atoi(string(v))
			sl[i] = n
		}

		inFlg := true
		for _, v := range in {
			if simpleInFunction(sl, v) == false {
				inFlg = false
			}
		}

		if inFlg == false {
			continue
		}

		outFlg := true
		for _, v := range out {
			if simpleInFunction(sl, v) == true {
				outFlg = false
			}
		}

		if outFlg == false {
			continue
		}

		ans++
	}

	fmt.Println(ans)

}
func simpleInFunction(slice []int, key int) bool {
	for _, s := range slice {
		if s == key {
			return true
		}
	}
	return false
}
