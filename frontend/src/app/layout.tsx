import "./styles/globals.css";
import Header from '../components/Header';
import Footer from '../components/Footer';

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="en">
      <body >
          <Header />

          <main>{children}</main>

          <Footer />
      </body>
    </html>
  );
}
