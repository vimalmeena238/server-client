using System;
using System.Net;
using System.IO;

public class Class1
{

        static void Main()
        {
            WebClient client = new WebClient();
            Stream stream = client.OpenRead("http://192.168.0.105/UGP.txt");
            StreamReader reader = new StreamReader(stream);
            String content = reader.ReadToEnd();
            System.IO.File.WriteAllText(@"C:\Users\MY HP\Desktop\new.txt", content);
    }
}
