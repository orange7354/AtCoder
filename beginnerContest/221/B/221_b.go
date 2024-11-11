package main

import (
	"bufio"
	"fmt"
	"os"
)

func main() {
	scanner := bufio.NewScanner(os.Stdin)
	scanner.Scan()
	S := scanner.Text()
	scanner.Scan()
	T := scanner.Text()

	// 既に同じ場合は Yes
	if S == T {
		fmt.Println("Yes")
		return
	}

	// 文字列の長さ
	n := len(S)

	// 1回の操作で到達可能かチェック
	found := false
	// 隣接する文字を1回入れ替えて確認
	for i := 0; i < n-1; i++ {
		// 文字列をバイトスライスに変換して操作
		temp := []byte(S)
		// i番目とi+1番目を入れ替え
		temp[i], temp[i+1] = temp[i+1], temp[i]

		// 入れ替え後の文字列がTと一致するかチェック
		if string(temp) == T {
			found = true
			break
		}
	}

	if found {
		fmt.Println("Yes")
	} else {
		fmt.Println("No")
	}
}
